// Type definitions for ag-grid v13.0.0
// Project: http://www.ag-grid.com/
// Definitions by: Niall Crosby <https://github.com/ag-grid/>
import { Column } from "../entities/column";
import { RowNode } from "../entities/rowNode";
import { CellComp } from "./cellComp";
import { LoggerFactory } from "../logger";
import { GridCell } from "../entities/gridCell";
import { BeanStub } from "../context/beanStub";
import { RefreshCellsParams } from "../gridApi";
export declare class RowRenderer extends BeanStub {
    private paginationProxy;
    private columnController;
    private gridOptionsWrapper;
    private gridCore;
    private gridPanel;
    private $scope;
    private expressionService;
    private templateService;
    private valueService;
    private eventService;
    private pinnedRowModel;
    private context;
    private loggerFactory;
    private focusedCellController;
    private cellNavigationService;
    private columnApi;
    private gridApi;
    private beans;
    private rangeController;
    private firstRenderedRow;
    private lastRenderedRow;
    private rowCompsByIndex;
    private floatingTopRowComps;
    private floatingBottomRowComps;
    private forPrint;
    private autoHeight;
    private rowContainers;
    private pinningLeft;
    private pinningRight;
    private refreshInProgress;
    private logger;
    agWire(loggerFactory: LoggerFactory): void;
    init(): void;
    private onPageLoaded(refreshEvent?);
    getAllCellsForColumn(column: Column): HTMLElement[];
    refreshFloatingRowComps(): void;
    private refreshFloatingRows(rowComps, rowNodes, pinnedLeftContainerComp, pinnedRightContainerComp, bodyContainerComp, fullWidthContainerComp);
    private onPinnedRowDataChanged();
    private onModelUpdated(refreshEvent);
    private getRenderedIndexesForRowNodes(rowNodes);
    redrawRows(rowNodes: RowNode[]): void;
    private getCellToRestoreFocusToAfterRefresh(params);
    redrawAfterModelUpdate(params?: RefreshViewParams): void;
    private scrollToTopIfNewData(params);
    private sizeContainerToPageHeight();
    private getLockOnRefresh();
    private releaseLockOnRefresh();
    private restoreFocusedCell(gridCell);
    stopEditing(cancel?: boolean): void;
    forEachCellComp(callback: (renderedCell: CellComp) => void): void;
    private forEachRowComp(callback);
    addRenderedRowListener(eventName: string, rowIndex: number, callback: Function): void;
    refreshCells(params?: RefreshCellsParams): void;
    destroy(): void;
    private binRowComps(recycleRows);
    private removeRowComps(rowsToRemove);
    redrawAfterScroll(): void;
    private removeRowCompsNotToDraw(indexesToDraw);
    private calculateIndexesToDraw();
    private redraw(rowsToRecycle?, animate?, afterScroll?);
    private flushContainers(rowComps);
    private onDisplayedColumnsChanged();
    private redrawFullWidthEmbeddedRows();
    private createOrUpdateRowComp(rowIndex, rowsToRecycle, animate, afterScroll);
    private destroyRowComps(rowCompsMap, animate);
    private checkAngularCompile();
    private workOutFirstAndLastRowsToRender();
    getFirstVirtualRenderedRow(): number;
    getLastVirtualRenderedRow(): number;
    private keepRowBecauseEditing(rowComp);
    private createRowComp(rowNode, animate, afterScroll);
    getRenderedNodes(): RowNode[];
    navigateToNextCell(event: KeyboardEvent, key: number, rowIndex: number, column: Column, floating: string): void;
    startEditingCell(gridCell: GridCell, keyPress: number, charPress: string): void;
    private getComponentForCell(gridCell);
    onTabKeyDown(previousRenderedCell: CellComp, keyboardEvent: KeyboardEvent): void;
    tabToNextCell(backwards: boolean): boolean;
    private moveToCellAfter(previousRenderedCell, backwards);
    private moveEditToNextCell(previousRenderedCell, nextRenderedCell);
    private moveEditToNextRow(previousRenderedCell, nextRenderedCell);
    private findNextCellToFocusOn(gridCell, backwards, startEditing);
}
export interface RefreshViewParams {
    recycleRows?: boolean;
    animate?: boolean;
    suppressKeepFocus?: boolean;
    onlyBody?: boolean;
    newData?: boolean;
    newPage?: boolean;
}
